function calcularProducto()
{
	const valorCompra=document.getElementById('valorCompra').value;
	const porcentajeGanancia=document.getElementById('porcentajeGanancia').value;
	const porcentajeIVA=document.getElementById('porcentajeIVA').value;
	const ganancia=(valorCompra*porcentajeGanancia)/100;
	const IVA=valorCompra*(porcentajeIVA/100);
	const valorVenta=parseInt(valorCompra)+parseInt(ganancia)+parseInt(IVA);
	document.getElementById('resultadoVenta').value=valorVenta;
	document.getElementById('resultadoGanancia').value=ganancia;
}
function calcularResistencia()
{
	const color_1=document.getElementById('colorSelecionado1').value;
	const color_2=document.getElementById('colorSelecionado2').value;
	const color_3=document.getElementById('colorSelecionado3').value;
	const totalResistencia=color_1+color_2*(parseInt(color_3));
	document.getElementById('valorResistencia').value=totalResistencia;
}
