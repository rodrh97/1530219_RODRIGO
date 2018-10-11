<h3>Agregar Alumno</h3>
<hr>

<div class="card">

    <div class="card-header" style="background-color: #A9A9F5;"> <strong> Datos del Alumno </strong> </div>
    <div class="card-body" style="background-color: #CECEF6;">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="matriculaAlumno">Matricula</label>
                <input type="text" class="form-control" name="matriculaAlumno" placeholder="Matricula del Alumno" required>
            </div>
            
            <div class="form-group">
                <label for="nombreAlumno">Nombre</label>
                <input type="text" class="form-control" name="nombreAlumno" placeholder="Nombre del Alumno" required>
            </div>

            <div class="form-group">
                <label for="carreraAlumno">Carrera</label>
                <select class="form-control" name="carreraAlumno" required>
                    <option value="ITI">INGENIERIA EN TECNOLOGÍAS DE LA INFORMACIÓN</option>
                    <option value="ISA">INGENIERIA EN SISTEMAS AUTOMOTRICES</option>
                    <option value="IME">INGENIERIA EN MECATRONICA</option>
                    <option value="IMA">INGENIERIA EN MANUFACTURA</option>
                    <option value="PyMES">PyMES</option>
                </select>
            </div>

            <div class="form-group">
                <label for="situacionAlumno">Situación Academica</label>
                <select class="form-control" name="situacionAlumno" required>
                    <option value="O">Ordinario</option>
                    <option value="R">Repetición</option>
                    <option value="E">Especial</option>
                </select>
            </div>

            <div class="form-group">
                <label for="correoAlumno">Correo</label>
                <input type="email" class="form-control" name="correoAlumno" placeholder="matricula@upv.edu.mx" required>
            </div>

            <div class="form-group">
                <label for="tutorAlumno">Tutor</label>
                <input type="text" class="form-control" name="tutorAlumno" placeholder="Nombre del tutor" required>
            </div>
            

            <div class="form-group">
                <label for="fotoAlumno">Fotografia:</label> <br>
                <input type="file" class="form-control" name="fotoAlumno"  />
            </div>


            <center><input type="submit"  class="btn btn-success" style="background-color: #5858FA;" value="Guardar Datos" /></center>

        </form>

    </div>
</div>

<?php
    $Controlador = new NewController();
    if(isset($_POST['matriculaAlumno'])){
        $Controlador -> guardarDatosAlumno();
    }
?>