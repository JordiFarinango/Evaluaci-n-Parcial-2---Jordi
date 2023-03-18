function init() {
    $("#formSillas").on("submit", function (e) {
      guardaryeditar(e);
    });
  }
  
  var guardaryeditar = (e) => {
    e.preventDefault();
    var formularioSilla = new FormData($("#formSillas")[0]);
    var idSillas = document.getElementById("idSillas").value;
    var url = "";
  
    if (idSillas === undefined || idSillas === "") {
      url = "../../app/controllers/Sillas.controllers.php?op=insertar";
    } else {
      url = "../../app/controllers/Sillas.controllers.php?op=actualizar";
    }
  
    $.ajax({
      url: url,
      type: "POST",
      data: formularioSillas,
      processData: false,
      contentType: false,
      cache: false,
      success: (Sillas) => {
        console.log(Sillas);
        Sillas = JSON.parse(Sillas);
        if (Sillas == "ok") {
          alert("Guardado Exitosamente");
          limpiacajas();
          cargaTabla();
        } else {
          alert("Error, intentelo nuevamente");
          limpiacajas();
        }
      },
    });
  };
  
  $().ready(() => {
    cargaTabla();
  });
  
  var cargaTabla = () => {
    var html = "";
    $.post(
      "../../app/controllers/Sillas.controllers.php?op=todos",
      (datosUsuarios) => {
        datosUsuarios = JSON.parse(datosUsuarios);
        $.each(datosUsuarios, (index, val) => {
          html +=
            "<tr>" +
            "<td>" + (index + 1) + "</td>" +
            "<td>" + val.Material + "</td>" +
            "<td>" + val.Asiento+ "</td>" +
            "<td>" + val.Tamaño + "</td>" +
            "<td>" + val.Diseño + "</td>" +
            "<td>" + val.Numeropatas + "</td>" +
            "<td>" + val.Color + "</td>" +
            "<td>";
            html +=
            "<button class = 'btn btn-success' onclick='editar(" + val.idSillas + ")'>Editar</button>";
            html +=
            "<button class = 'btn btn-danger' onclick='eliminar(" + val.idSillas + ")'>Eliminar</button>";
            html += "</td>" + "</tr>";
        });
        $("#listaSillas").html(html);
      }
    );
  };
  
  var editar = (idSillas) => {
    $.post('../../app/controllers/Silla.controllers.php?op=uno', { idSillas: idSillas }, (Sillas) => {
      Sillas = JSON.parse(Sillas);
      document.getElementById('idSillas').value = Sillas.idSillas;
      document.getElementById('Material').value = Sillas.Material;
      document.getElementById('Asiento').value = Sillas.Asiento;
      document.getElementById('Tamaño').value = Sillas.Tamaño;
      document.getElementById('Diseño').value = Sillas.Diseño;
      document.getElementById('Numeropatas').value = Sillas.Numeropatas;
      document.getElementById('Color').value = Sillas.Color;
    });
  
    $('#modalSillas').modal('show');
  
  };


  var eliminar = (idSillas) => {
    if (confirm("¿Desea elminar este registro?")) {
      $.post(
        "../../app/controllers/Sillas.controllers.php?op=eliminar",
        { idSillas: idSillas },
        (Sillas) => {
          Sillas = JSON.parse(Sillas);
          if (Sillas == true) {
            alert("Se eliminó");
            cargaTabla();
          } else {
            alert("Error, intentelo de nuevo");
            cargaTabla();
          }
        }
      );
    }
  };
 
  
  
   var limpiacajas = () => {
    document.getElementById("idSillas").value = "";
    document.getElementById("Material").value = "";
    document.getElementById("Asiento").value = "";
    document.getElementById("Tamaño").value = "";
    document.getElementById('Diseño').value = "";
    document.getElementById('Numeropatas').value = "";
    document.getElementById('Color').value = "";
    $("#modalSillas").modal("hide");
  };

  $('#tablaSillas').DataTable({
    "scrollY": "500px", // Altura del área de visualización
    "scrollCollapse": true, // Hace que la tabla colapse cuando el contenido es más grande que el área de visualización
    "paging": true, // Habilita la paginación
    "searching": false, // Habilita la búsqueda
    "searchDelay": 500, // Establece un retraso de 500 milisegundos antes de realizar la búsqueda
    "bFilter": true, // Habilita el filtrado (búsqueda)
    "columnDefs": [{
        "targets": [1, 5], // Las columnas en las que se realizará la búsqueda (0, 1, 2)
        "type": "string" // El tipo de datos que se utilizarán para la búsqueda (cadena de texto)
    }]
});
  
  init();
  