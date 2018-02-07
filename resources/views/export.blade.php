<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script> 

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js" ></script>
  <script type="text/javascript">
   
   $(document).ready(function(){

    var table = $('#dataTable').DataTable( {
           dom: 'Bfrtip',
              buttons: [
                  'copy', 'csv', 'excel', 'pdf'
              ]
          } );
    table.buttons().container()
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );


   });

  

 </script>
 
</head>

<body>
	<table id="dataTable">
    <thead>
        <tr>
            <th>title-1</th>
            <th>title-2</th>
            <th>df</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>data-1</td>
            <td>data-2</td>
            <td>data-3</td>
        </tr>
        <tr>
            <td>data-1</td>
            <td>data-2</td>
            <td>data-3</td>
        </tr>
    </tbody>
</table>


 
</body>

</html>