namespace ITESCAM {

  const constMonths: Month[] = [
    { name: "enero", value: 1, numdays: 31 },
    { name: "febrero", value: 2, numdays: 28 },
    { name: "marzo", value: 3, numdays: 31 },
    { name: "abril", value: 4, numdays: 30 },
    { name: "mayo", value: 5, numdays: 31 },
    { name: "junio", value: 6, numdays: 30 },
    { name: "julio", value: 7, numdays: 31 },
    { name: "agosto", value: 8, numdays: 31 },
    { name: "septiembre", value: 9, numdays: 30 },
    { name: "octubre", value: 10, numdays: 31 },
    { name: "noviembre", value: 11, numdays: 30 },
    { name: "diciembre", value: 12, numdays: 31 },
  ];

  const zellerMonths: Month[] = [
    { name: "enero", value: 11, numdays: 31 },
    { name: "febrero", value: 12, numdays: 28 },
    { name: "marzo", value: 1, numdays: 31 },
    { name: "abril", value: 2, numdays: 30 },
    { name: "mayo", value: 3, numdays: 31 },
    { name: "junio", value: 4, numdays: 30 },
    { name: "julio", value: 5, numdays: 31 },
    { name: "agosto", value: 6, numdays: 31 },
    { name: "septiembre", value: 7, numdays: 30 },
    { name: "octubre", value: 8, numdays: 31 },
    { name: "noviembre", value: 9, numdays: 30 },
    { name: "diciembre", value: 10, numdays: 31 },
  ];

  const constDays = [
    { name: "domingo" },
    { name: "lunes" },
    { name: "martes" },
    { name: "miércoles" },
    { name: "jueves" },
    { name: "viernes" },
    { name: "sábado" },
  ];

  export interface Day {
    name?: string;
    value: number;
    abbr?: string;
    month?: Month;
    year?: Year;
    color?: string;
    events?: Event[]
  }

  export interface Month {
    name?: string;
    value: number;
    numdays: number;
    days?: Day[];
    weeks?: Week[];
    year?: Year;
  }

  export interface Week {
    value: number;
    days?: Day[];
  }

  export interface Year {
    value: number;
    months?: Month[];
  }

  export interface Event {
    type: string;
    name: string;
    important: boolean;
    iconPath: string;
    url?: string;
    description?: string;
  }
  
  export class MDate {
    day!: Day;
    month!: Month;
    year!: Year;
    constructor(day: number, month: number, year:number){
      this.day = { value: day };
      this.month = this.getMonthByMMYY(month, year);
      this.year = { value: year };
    }
    getMonthByMMYY(month: number, year: number): Month {
      let nmon: Month = { value: 0, numdays: 0 };
      for (const mon of constMonths) {
        if(mon.value === month){
          nmon.value = month;
          if(mon.name === 'febrero' && MDate.isLeapYear(year)){
            nmon.numdays = mon.numdays++;
          } else {
            nmon.numdays = mon.numdays;
          }
          nmon.year = { value: year };
          return nmon;
        }
      }
      return { name: 'enero', value: 1, numdays: 31 };
    }
    static isLeapYear(year: number): boolean {
			let response = false;
			response = (year%4==0) ? ((year%100==0) ? ((year%400==0) ? true : false): true ) : false;
			return response;
    }
    getCurrentDate() {
      return { day: this.day, month: this.month, year: this.year };
    }
    toString(): string {
      return `${this.day.value}/${this.month.value}/${this.year.value}`;
    }
  }

  export interface Cycle {
    startDate: MDate;
    endDate: MDate;
    type?: string;
    years?: Year[];
  }

  export interface Period {
    startDate: MDate;
    endDate: MDate;
    years?: Year[];
  }

  export function capitalize(word: string|undefined): string {
    let response = '';
    if(typeof word === 'string'){
      response = word[0].toUpperCase() + word.slice(1);
    }
    return response;
  }

  function getCompleteMDate(date: MDate): MDate {
    let name = Calendar.getDayName(date.day.value, date.month.value, date.year.value);
    let mon: Month = {
      value: date.month.value,
      numdays: date.month.numdays,
      name: constMonths[date.month.value-1].name,
      year: date.year
    };
    let ndate = date;
    ndate.day = { 
      value: date.day.value,
      name: name,
      abbr: (typeof name === "string") ? name.substring(0, 3) : undefined,
      month: mon,
      year: date.year
    };
    // console.log(date.month);
    ndate.month = mon;
    ndate.year = {
      value: date.year.value
    }
    return ndate;
  }

  export class Calendar {
    period!: Period;
    cycles?: Cycle[];
    constructor(startDate?: MDate, endDate?: MDate, type?: string) {
      if(typeof startDate !== "undefined" && typeof endDate !== "undefined" && typeof type !== "undefined"){
        this.period = this.createPeriod(startDate, endDate, type);
      } else {
        this.period = this.emptyPeriod();
      }
    }
    createPeriod(startDate: MDate, endDate:MDate, type:string): Period {
      let start = getCompleteMDate(startDate);
      let end = getCompleteMDate(endDate);
      let period: Period = {
        startDate: start,
        endDate: end,
        years: this.getYears(start, end)
      };
      return period;
    }
    emptyPeriod(): Period {
      let start = new MDate(1,1,2000);
      let end = new MDate(1,1,2000);
      let type = '';
      let period: Period = {
        startDate: start,
        endDate: end,
      };
      return period;
    }
    setCycle(cycle: Cycle): void {
      this.period = cycle;
    }
    getYears(startDate: MDate, endDate: MDate): Year[] {
      let years: Year[] = [];
      let startYear = startDate.year.value, endYear = endDate.year.value;
      let currentYear = startYear;
      let startMonth = startDate.month.value, lastMonth = endDate.month.value;
      let startDay = startDate.day.value, lastDay = endDate.day.value;
      let month;
      while(currentYear <= endYear){
        month = constMonths[0];
        if(currentYear === endYear){
          month.year = { value: currentYear };
          years.push({
            value: currentYear, 
            months: this.getMonths(month , constMonths[lastMonth-1], undefined, lastDay)
          });
        } else {
          if(currentYear === startYear){
            month = constMonths[startMonth-1];
            month.year = { value: currentYear };
            years.push({
              value: currentYear, 
              months: this.getMonths(month, undefined , startDay, undefined)
            });
          } else {
            month.year = { value: currentYear };
            years.push({
              value: currentYear, 
              months: this.getMonths(month)
            });
          }
        }
        currentYear++;
      }
      return years;
    }
    getMonths(startMonth: Month, endMonth?: Month, startDay?: number, endDay?: number): Month[] {
      let months: Month[] = [];
      let __startMonth = startMonth.value, __endMonth = 12, __year = 2000;
      let __startDay = 1, __endDay = constMonths[11].numdays;
      if(typeof endMonth !== "undefined"){
        __endMonth = endMonth.value;
      }
      if(typeof startMonth.year !== "undefined"){
        __year = startMonth.year.value;
      }
      let currentMonth = __startMonth;
      let month: Month = { value: 0, numdays: 0 }; let days: Day[] = [];
      let weeks: Week[] = [];
      while(currentMonth <= __endMonth){
        month = constMonths[currentMonth-1];
        month.year = { value: __year };
        if(month.value === constMonths[1].value && MDate.isLeapYear(__year)){
          month.numdays++;
        }
        if(currentMonth === __startMonth && typeof startDay !== "undefined"){
          __startDay = startDay;
          __endDay = month.numdays;
        }else if(currentMonth === __endMonth && typeof endDay !== "undefined"){
          __startDay = 1;
          __endDay = endDay;
        } else {
          __startDay = 1;
          __endDay = month.numdays;
        }
        days = this.getDays(month, __startDay, __endDay);
        weeks = this.getWeeks(days);
        months.push({
          value: currentMonth,
          numdays: month.numdays,
          days: days,
          weeks: weeks,
          name: constMonths[currentMonth-1].name,
          year: month.year
        });
        currentMonth++;
      }
      return months;
    }
    getWeeks(days: Day[]): Week[] {
      let weeks: Week[] = [], daysOfWeek: Day[] = [];
      let weekNum = 1; let lastDay: Day;
      if(typeof days !== "undefined"){
        lastDay = days[days.length -1];
        for (const day of days) {
          daysOfWeek.push(day);
          if(day.name == "sábado" || day === lastDay){
            weeks.push({
              value: weekNum,
              days: daysOfWeek
            })
            weekNum++;
            daysOfWeek = [];
          }
        }
      }
      return weeks;
    }
    getDays(month: Month, startDay: number, endDay: number): Day[] {
      let days: Day[] = [];
      let mon: Month = { value: 0, numdays: 0 };
      mon.value = month.value;
      mon.numdays = month.numdays;
      mon.name = month.name;
      mon.year = month.year;
      let currentDay = startDay;
      let year = (typeof month.year !== "undefined") ? month.year.value : 2000;
      let name;
      while(currentDay <= endDay){
        name = Calendar.getDayName(currentDay, month.value, year);
        days.push({
          value: currentDay,
          month: mon,
          year: month.year,
          name: name,
          abbr: (typeof name === "string") ? name.substring(0, 3) : undefined,
        });
        currentDay++;
      }
      return days;
    }
    /**
     * Applies the Zeller rule to calculate the name of an speciefied Date
     * @param {number} day The day of in number format
     * @param {number} month The month in number format
     * @param {number} year The year in number format
     */
    static getDayName(day: number, month: number, year: number): string | undefined {
      let k = day, m = zellerMonths[month-1].value;
      let yearText = year.toString();
      let C = parseInt(yearText.substring(0,2));
      let d = parseInt(yearText.substring(2));
      let D = (m>=11) ? (d-1) : d;
      let f = k + Math.floor((13*m-1)/5) + D + Math.floor(D/4) + Math.floor(C/4) - 2*C;
      let numDay = 0;
      if(f < 0){
        f *= -1;
        let mult = 7;
        while(f > mult){
          mult += 7;
        }
        numDay = mult - f;
      } else {
        numDay = f%7;
      }
      let response = constDays[numDay].name;
      return response;
    }
    searchMonth(month: string | undefined, year: number): Month {
      let mon: Month = { value: 0, numdays: 0 };
      if(typeof this.period.years !== "undefined"){
        for (const cYear of this.period.years) {
          if(cYear.value === year && typeof cYear.months !== "undefined"){
            for (const cMonths of cYear.months) {
              if(cMonths.name === month){
                mon.value = cMonths.value;
                mon.numdays = cMonths.numdays;
                mon.days = cMonths.days;
                mon.name = cMonths.name;
                mon.year = cMonths.year;
                mon.weeks = cMonths.weeks;
                break;
              }
            }
            break;
          }
        }
      }
      return mon;
    }
    getTableHTML(month: number, year: number): string {
      let monNode: Month = this.searchMonth(constMonths[month-1].name, year);
      let monYear = (typeof monNode.year !== "undefined") ? monNode.year.value.toString(): "";
      let yearText = capitalize(monNode.name)+' '+monYear;
      // let id = `${monNode.name!.substring(0,3)+monYear}`;
      let HTMLText: string = 
      `<table onclick="toggleView(this)" data-year="${monYear}" data-month="${monNode.name!}">
        <tbody>
          <tr><th colspan="7">${yearText}</th></tr>
          <tr class="dweek">
            <td>D</td>
            <td>L</td>
            <td>M</td>
            <td>M</td>
            <td>J</td>
            <td>V</td>
            <td>S</td>
          </tr>
          ${this.drawWeeksGrid(monNode.weeks!)}
        </tbody>
      </table>`;
      return HTMLText;
    }
    drawWeeksGrid(weeks: Week[] ): string {
      let response = ''; let isLastWeek = false, lastWeek = weeks[weeks.length-1].value, hasSixWeeks = (lastWeek <= 5) ? false : true;
      if(typeof weeks !== "undefined"){
        for (const week of weeks) {
          if(week.value === lastWeek){ isLastWeek = true; }
          response += 
          `<tr class="week">
            ${this.drawDaysGrid(week.days!, isLastWeek)}
          </tr>\n`;
        }
        if(!hasSixWeeks){
          let currentDay = 0;
          response += `<tr class="week">`;
          while(currentDay <= constDays.map(e => e.name).indexOf("sábado")){
            response += `<td></td>\n`;
            currentDay++;
          }
          response +=`</tr>\n`;
        }
      }
      return response;
    }
    drawDaysGrid(days: Day[], isLastWeek: boolean): string {
      let response = ''; 
      let lastDay = days[days.length-1].name;
      for (const day of constDays) {
        if(day.name === days[0].name){
          break;
        }
        response += `<td></td>\n`;
      }
      for (const day of days) {
        response += 
        `<td id="${day.abbr!+day.value}_${day.year!.value}">${day.value}</td>\n`;
      }
      if(isLastWeek && lastDay !== constDays[6].name){
        let currentDay = constDays.map(e => e.name).indexOf(lastDay!);
        while(currentDay !== constDays.map(e => e.name).indexOf("sábado")){
          response += `<td></td>\n`;
          currentDay++;
        }
      }
      return response;
    }
    getAllMonthsHTML(months: Month[]): string {
      let text = '';
      for (const month of months) {
        text += 
        `<div class="month" id="${month.name!.substring(0,3)+month.year!.value}">` 
          + this.getTableHTML(month.value, month.year!.value)
        +'</div>\n';
      }
      return text;
    }
  }
}

export = ITESCAM