// var url_Base = "/libreria/public/buscar";
// var url_mostrar = "/libreria/public/mostrar/";
// $(document).ready(function(){
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': "{{ csrf_token() }}"
//         }
//     });
//     var busqueda;
//
//     $("#libro").focus();
//     $("#libro").keyup(function(){
//         busqueda = $("#libro").val();
//         $.ajax({
//             type: "POST",
//             url: url_Base,
//             data: busqueda,
//             beforeSend: function () {
//                 $("#busqueda").html("...");
//             }
//         }).done(function(data) {
//             debugger;
//             $("#busqueda").show();
//             $("#busqueda").html(data);
//             $("#libro").css("background","#FFF");
//         }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
//             alert("Status: " + textStatus); alert("Error: " + errorThrown);
//         })
//
//     });
//
// });
// function selectLibro(val) {
//     document.location.href=url_mostrar+val;
//     $("#busqueda").hide();
// }