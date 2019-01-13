<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="css\Practica5_1.css" rel="stylesheet" type="text/css">
	<script src="js\practica5.js"></script>

	<title>Practica 5</title>
</head>
<body bgcolor="white" >

		<div class="name">
			<form action="enviar.php" method="post" id="formu">
				<input type="text" id="Nombre" placeholder="Ponga su nombre aqui" onkeypress="return soloLetras(event)" onpaste="return false" required >
				<input type="text" id="Apellido" placeholder="Ponga su apellido aqui" onkeypress="return soloLetras(event)" onpaste="return false" required>
				<input type="text" id="Edad" placeholder="Ponga aqui su Edad"  onkeypress="return numb(event)" onpaste="return false" required>
				<input type="button" value="Enviar" onclick="changeText()" id="boton" >
			</form>
		</div>
		
	<p  id="myid_01">
		Eduardo Darynel Huchin Moo 15 años
	</p>

	<h2>Calcular el area de un cuadrado</h2>

	<div class="triangulo">
			<form action="enviar.php" method="post" id="formu">
				<input type="text" id="Base" placeholder="Basei"  onkeypress="return numb(event)" onpaste="return false" required>
				<input type="text" id="Altura" placeholder="Altura" onkeypress="return numb(event)" onpaste="return false" required>
				<input type="button" value="Calcular" onclick="tarea()" id="boton" >
			</form>
	</div>

	<div class="numeros">
			<table>
			<tr>
				<td> 1</td>
				<td> 2</td>
				<td> 3</td>
				<td> 4</td>
				<td> 5</td>
				<td> 6</td>
				<td> 7</td>
				<td> 8</td>
				<td> 9</td>
				<td>10 </td>
			</tr>
			<tr>
				<td> 11</td>
				<td> 12</td>
				<td> 13</td>
				<td> 14</td>
				<td> 15</td>
				<td> 16</td>
				<td> 17</td>
				<td> 18</td>
				<td> 19</td>
				<td>20 </td>
			</tr>
			<tr>
				<td> 21</td>
				<td> 22</td>
				<td> 23</td>
				<td> 24</td>
				<td> 25</td>
				<td> 26</td>
				<td> 27</td>
				<td> 28</td>
				<td> 29</td>
				<td>30 </td>
			</tr>

			<tr>
				<td> 31</td>
				<td> 32</td>
				<td> 33</td>
				<td> 34</td>
				<td> 35</td>
				<td> 36</td>
				<td> 37</td>
				<td> 38</td>
				<td> 39</td>
				<td>40 </td>
			</tr>
			<tr>
				<td> 41</td>
				<td> 42</td>
				<td> 43</td>
				<td> 44</td>
				<td> 45</td>
				<td> 46</td>
				<td> 47</td>
				<td> 48</td>
				<td> 49</td>
				<td>50 </td>
			</tr>
			<tr>
				<td> 51</td>
				<td> 52</td>
				<td> 53</td>
				<td> 54</td>
				<td> 55</td>
				<td> 56</td>
				<td> 57</td>
				<td> 58</td>
				<td> 59</td>
				<td>60 </td>
			</tr>
			<tr>
				<td> 61</td>
				<td> 62</td>
				<td> 63</td>
				<td> 64</td>
				<td> 65</td>
				<td> 66</td>
				<td> 67</td>
				<td> 68</td>
				<td> 69</td>
				<td>70 </td>
			</tr>
			<tr>
				<td> 71</td>
				<td> 72</td>
				<td> 73</td>
				<td> 74</td>
				<td> 75</td>
				<td> 76</td>
				<td> 77</td>
				<td> 78</td>
				<td> 79</td>
				<td>80 </td>
			</tr>
			<tr>
				<td> 81</td>
				<td> 82</td>
				<td> 83</td>
				<td> 84</td>
				<td> 85</td>
				<td> 86</td>
				<td> 87</td>
				<td> 88</td>
				<td> 89</td>
				<td>90 </td>
			</tr>
			<tr>
				<td> 91</td>
				<td> 92</td>
				<td> 93</td>
				<td> 94</td>
				<td> 95</td>
				<td> 96</td>
				<td> 97</td>
				<td> 98</td>
				<td> 99</td>
				<td>100 </td>
			</tr>
		</table>
	</div>

	<div  class="primos">
		<p>
			Los numeros primos del 1 al 100 son
		</p>

		<form action="enviar.php" method="post" id="formu">
					<input type="button"  value="Calcular"  onclick="primo()"  id="boton" >
					<textarea id="Vprimos" readonly="readonly"> </textarea>
		</form>
	</div>

	

	<div class="colores">
		<table>
			<tr>
				<td id="rojo" onmouseover="pintar('Red')" onmouseout="pintar('white')"></td>
				<td id="verde" onmouseover="pintar('Green')" onmouseout="pintar('white')"></td>
				<td id="azul" onmouseover="pintar('Blue')" onmouseout="pintar('white')"></td>
				<td id="naranja" onmouseover="pintar('orange')" onmouseout="pintar('white')"></td>
				<td id="amarillo" onmouseover="pintar('Yellow')"onmouseout="pintar('white')"></td>
			</tr>
		</table>
		
	</div>



</body>
</html>