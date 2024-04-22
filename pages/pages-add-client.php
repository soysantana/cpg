<?php
  $page_title = 'Page: Add Client';
  require_once('../config/load.php');
  page_require_level(2);
?>

<?php include_once('../components/navbar.php');  ?>
<?php echo display_msg($msg); ?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="py-3 mb-4"><span class="text-muted fw-light">Clientes/</span> Nuevo Cliente</h4>

  <!-- Basic Layout & Basic with Icons -->
  <div class="card mb-4">
    <h5 class="card-header">Registro Para Nuevos Clientes</h5>
    <form class="card-body">
      <h6>1. Informacion Personal</h6>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label" for="name">Nombre</label>
          <input type="text" id="name" class="form-control" placeholder="Ingrese su nombre" autocomplete="off" />
        </div>
        <div class="col-md-6">
          <label class="form-label" for="nickname">Apodo</label>
          <input type="text" id="nickname" class="form-control" placeholder="Ingrese su apodo" autocomplete="off" />
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label" for="dni">Cedula</label>
          <input type="text" id="dni" class="form-control" placeholder="Ingrese su cedula" autocomplete="off" />
        </div>
        <div class="col-md-6">
          <label class="form-label" for="dni">Telefono</label>
          <input type="text" id="dni" class="form-control" placeholder="Ingrese su numero celular" autocomplete="off" />
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
          <label class="form-label" for="civilstatus">Estado Civil</label>
          <select class="form-select" id="civil" name="civil">
            <option selected="">Selecione un estado civil</option>
              <option value="Soltero/a">Soltero/a</option>
              <option value="Casado/a">Casado/a</option>
              <option value="Divorciado/a">Divorciado/a</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label" for="civilstatus">Sexo</label>
          <select class="form-select" id="sex" name="sex">
            <option selected="">Selecione un sexo</option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label" for="conyugue">Conyugue</label>
          <select class="form-select" id="conyugue" name="conyugue">
            <option selected="">Selecione una opcion</option>
              <option value="Yes">Si</option>
              <option value="Not">No</option>
          </select>
        </div>
      </div>
      <hr class="my-4 mx-n4" />
      <h6>2. Direcciones</h6>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label" for="direccion">Direccion</label>
          <input type="text" id="direccion" class="form-control" placeholder="Ingrese su direccion" autocomplete="off" />
        </div>
        <div class="col-md-6">
          <label class="form-label" for="city">Ciudad</label>
          <input type="text" id="city" class="form-control" placeholder="Ingrese su ciudad" autocomplete="off" />
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label" for="nacionalidad">Nacionalidad</label>
          <input type="text" id="nacionalidad" class="form-control" placeholder="Ingrese su nacionalidad" autocomplete="off" />
        </div>
        <div class="col-md-6">
          <label class="form-label" for="provincia">Provincia</label>
          <input type="text" id="provincia" class="form-control" placeholder="Ingrese su provincia" autocomplete="off" />
        </div>
      </div>
      <hr class="my-4 mx-n4" />
      <h6>3. Referencias</h6>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label" for="nameref1">1. Nombre</label>
          <input type="text" id="nameref1" class="form-control" placeholder="Ingrese su nombre" autocomplete="off" />
        </div>
        <div class="col-md-6">
          <label class="form-label" for="phoneref1">1. Telefono</label>
          <input type="text" id="phoneref1" class="form-control" placeholder="Ingrese su numero celular" autocomplete="off" />
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label" for="nameref2">2. Nombre</label>
          <input type="text" id="nameref2" class="form-control" placeholder="Ingrese su nombre" autocomplete="off" />
        </div>
        <div class="col-md-6">
          <label class="form-label" for="phoneref2">2. Telefono</label>
          <input type="text" id="phoneref2" class="form-control" placeholder="Ingrese su numero celular" autocomplete="off" />
        </div>
      </div>
      <hr class="my-4 mx-n4" />
      <h6>4. Otros</h6>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label" for="other">Otro</label>
          <input type="text" id="other" class="form-control" placeholder="Ingrese su otros" autocomplete="off" />
        </div>
        <div class="col-md-6">
          <label class="form-label" for="note">Nota</label>
          <input type="text" id="note" class="form-control" placeholder="Ingrese una nota" autocomplete="off" />
        </div>
      </div>
      <div class="pt-4">
        <button type="submit" class="btn btn-primary me-sm-3 me-1">Subir</button>
        <button type="reset" class="btn btn-label-secondary">Cancelar</button>
      </div>
    </form>
  </div>
</div>

<?php include_once('../components/footer.php');  ?>