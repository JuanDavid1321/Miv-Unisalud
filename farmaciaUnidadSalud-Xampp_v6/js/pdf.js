document.getElementById('descargar-pdf').addEventListener('click', function() {
  // Captura la imagen de la gráfica
  html2canvas(document.getElementById('cargaLineal'), {
    scale: 2 // aumenta la calidad de la imagen
  }).then(function(canvas) {
    // Crea un objeto jsPDF y agrega la imagen al archivo PDF
    var imgData = canvas.toDataURL('image/png');
    var pdf = new jsPDF('landscape', 'px');
    pdf.addImage(imgData, 'PNG', 25, 25, 600, 400);
    var img = new Image();
    img.src = 'images/logoUnicauca.png';
    pdf.addImage(img, 'png', 25, 10, 40, 70);
    var img2 = new Image();
    img2.src = 'images/inicioUnidadSalud.png';
    pdf.addImage(img2, 'png', 80, 25, 90, 50);
    // var img2 = new Image();
    // img2.src = 'images/inicioUnidadSalud.png';
    // pdf.addImage(img2, 'png', 500, 25, 90, 50);
    pdf.save('reporte_temp_mañana.pdf'); // descarga el archivo PDF
  });

  // Captura la imagen de la gráfica
  html2canvas(document.getElementById('cargaLineal2'), {
    scale: 2 // aumenta la calidad de la imagen
  }).then(function(canvas) {
    // Crea un objeto jsPDF y agrega la imagen al archivo PDF
    var imgData = canvas.toDataURL('image/png');
    var pdf = new jsPDF('landscape', 'px');
    pdf.addImage(imgData, 'PNG', 25, 25, 600, 400);
    var img = new Image();
    img.src = 'images/logoUnicauca.png';
    pdf.addImage(img, 'png', 25, 10, 40, 70);
    var img2 = new Image();
    img2.src = 'images/inicioUnidadSalud.png';
    pdf.addImage(img2, 'png', 80, 25, 90, 50);
    pdf.save('reporte_hum_mañana.pdf'); // descarga el archivo PDF
  }) 
  
  // Captura la imagen de la gráfica
  html2canvas(document.getElementById('cargaLineal3'), {
    scale: 2 // aumenta la calidad de la imagen
  }).then(function(canvas) {
    // Crea un objeto jsPDF y agrega la imagen al archivo PDF
    var imgData = canvas.toDataURL('image/png');
    var pdf = new jsPDF('landscape', 'px');
    pdf.addImage(imgData, 'PNG', 25, 25, 600, 400);
    var img = new Image();
    img.src = 'images/logoUnicauca.png';
    pdf.addImage(img, 'png', 25, 10, 40, 70);
    var img2 = new Image();
    img2.src = 'images/inicioUnidadSalud.png';
    pdf.addImage(img2, 'png', 80, 25, 90, 50);
    pdf.save('reporte_temp_tarde.pdf'); // descarga el archivo PDF
  })
  
  // Captura la imagen de la gráfica
  html2canvas(document.getElementById('cargaLineal4'), {
    scale: 2 // aumenta la calidad de la imagen
  }).then(function(canvas) {
    // Crea un objeto jsPDF y agrega la imagen al archivo PDF
    var imgData = canvas.toDataURL('image/png');
    var pdf = new jsPDF('landscape', 'px');
    pdf.addImage(imgData, 'PNG', 25, 25, 600, 400);
    var img = new Image();
    img.src = 'images/logoUnicauca.png';
    pdf.addImage(img, 'png', 25, 10, 40, 70);
    var img2 = new Image();
    img2.src = 'images/inicioUnidadSalud.png';
    pdf.addImage(img2, 'png', 80, 25, 90, 50);
    pdf.save('reporte_hum_tarde.pdf'); // descarga el archivo PDF
  });
});
