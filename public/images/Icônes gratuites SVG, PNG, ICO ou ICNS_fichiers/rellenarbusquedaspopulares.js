if (screen.width >1024) {
$("#contenedorBusquedasPopulares").load(encodeURI("rellenarbusquedaspopulares.php?idioma="+idioma+"&iconos_despues="+iconos_despues+"&iconos_antes="+iconos_antes+"&busqueda="+busqueda+"&prefijo="+prefijo+"&busquedas_populares="+busquedas_populares));
}
$("#totaliconos").load(encodeURI("funcionesajax.php?fun=totaliconos"));
$("#totaldescargas").load(encodeURI("funcionesajax.php?fun=totaldescargas"));
