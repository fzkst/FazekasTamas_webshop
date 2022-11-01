<h1>Új termék hozzáadása</h1>
<form method="POST">
  <div class="mb-3">
    <label for="nev_input" class="form-label">Termék neve:</label>
    <input type="text" class="form-control" id="nev_input" name="nev">    
  </div>
  <div class="mb-3">
    <label for="leiras_input" class="form-label">Termék leírása:</label>
    <textarea class="form-control" id="leiras_input" name="leiras" rows="4" cols="50"></textarea>
  </div>
  <div class="mb-3">
    <label for="ar_input" class="form-label">Termék ára:</label>
    <input type="password" class="form-control" id="ar_input" name="ar">    
  </div>
  <div class="mb-3">
    <label for="kep_input" class="form-label">Termékkép elérése:</label>
    <input type="text" class="form-control" id="kep_input" name="kep">    
  </div>
  <button type="submit" class="btn btn-primary">Hozzáadás</button>
</form>