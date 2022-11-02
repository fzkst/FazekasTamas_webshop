<h1>Regisztráció</h1>
<form name="regisztracios_form" method="POST">
  <div class="mb-3">
    <label for="felhasznalonev_input" class="form-label">Felhasználónév:</label>
    <input type="text" class="form-control" id="felhasznalonev_input" name="felhasznalonev" maxlength="30" required>    
  </div>
  <div class="mb-3">
    <label for="email_input" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email_input" name="email" maxlength="255" required>   
  </div>
  <div class="mb-3">
    <label for="jelszo_input" class="form-label">Jelszó:</label>
    <input type="password" class="form-control" id="jelszo_input" name="jelszo" minlength="8" maxlength="16" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
    <div id="passwordHelp" class="form-text">A jelszó legalább 8 karakter hosszú legyen, tartalmazzon kis- és nagybetűt, valamint számot.</div>
  </div>  
  </div>
  <div class="mb-3">
    <label for="teljes_nev_input" class="form-label">Teljes név:</label>
    <input type="text" class="form-control" id="teljes_nev_input" name="teljes_nev" maxlength="100" required>    
  </div>
  <div class="mb-3">
    <label for="szuletesi_datum_input" class="form-label">Születési dátum:</label>
    <input type="date" class="form-control" id="szuletesi_datum_input" name="szuletesi_datum" min="1900-01-01" max="2022-12-31" required>    
  </div>
  <div class="mb-3">
    <label for="iranyitoszam_input" class="form-label">Irányítószám:</label>
    <input type="number" class="form-control" id="iranyitoszam_input" name="iranyito_szam" min="1000" max="9999" required>    
  </div>
  <div class="mb-3">
    <label for="varos_input" class="form-label">Város:</label>
    <input type="text" class="form-control" id="varos_input" name="varos" maxlength="50" required>    
  </div>
  <div class="mb-3">
    <label for="cim_input" class="form-label">Cím:</label>
    <input type="text" class="form-control" id="cim_input" name="cim" maxlength="255" required>    
  </div>
  <button type="submit" class="btn btn-primary">Regisztráció</button>
</form>