    
  <?php
  include_once __DIR__."/../../includes/configuracion.php";
  include_once (STRUCTURE_PATH."head.php");
  include_once  __DIR__.'/../../vendor/avadim/fast-excel-reader/src/autoload.php';
  $file = __DIR__.'/../../uploads/planilla.xlsx';
  $excel = \avadim\FastExcelReader\Excel::open($file);
  $excel->setDateFormat('d-m-Y');
  $result = $excel->readRows(true);
  $sheet = $excel->sheet();
  $firstRow = $sheet->readFirstRow();
  ?>
  <main class="p-5 text-center bg-light">
    <!-- Contenido de la página -->

    <div class="card shadow">
    <div class="card-header">
        <div class="card-title">
            <h2 class="fst-italic">Librería útil: FAST EXCEL READER - Ejemplo de lectura de una planilla iniciando en la primer fila.</h2>
          <h4>Fast Excel Reader es una librería que permite la lectura de archivos con extensión xlsx.</h4> 
        </div>
        <div class="card-subtitle">
          <p>En este ejemplo, se muestra el contenido de una planilla excel en la que sus datos estan acomodados a partir de la primer fila, utilizando ésta como encabezado de las columnas.
           <br> Se tienen en cuenta los campos tipo "date" para darle un formato legible.</p>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
          <thead class="border">
            <tr>
              <?php
                  echo '<th class="border-2 border-top-0 border-start-0 table-light" scope="col"></th>';
                  foreach ($firstRow as $key => $value) {
                    echo '<th class="border-2 border-top-0 table-light" scope="col">'.$key.'</th>';
                  }
                  ?>        
            </tr>
            <tr>
              
              <?php
              echo '<td class="border-2 border-start-0 table-light fw-bold" scope="col">'.($sheet->firstRow()-1).'</td>';
                foreach ($firstRow as $key => $value) {
                  echo '<th scope="col">'.$value.'</th>';
                }
                ?>        
            </tr>
          </thead>
          <tbody class="border">
            <?php
            foreach ($result as $cellKey => $cellValue) {    
              echo '<tr>';
              echo '<td class="border-2 border-start-0 table-light fw-bold">'.$cellKey.'</td>';
              foreach ($firstRow as $rowKey => $rowValue) {
                echo isset($cellValue[$rowValue])? '<td>'.$cellValue[$rowValue].'</td>':'<td></td>';
              }
              echo '</tr>';
            }
            ?>
          </tbody>
        </div>
    </table>
  </div>

  <?php include (STRUCTURE_PATH."footer.php"); ?>