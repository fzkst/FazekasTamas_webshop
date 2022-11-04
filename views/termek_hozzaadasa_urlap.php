<h1>Új termék hozzáadása</h1>
<form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="nev_input" class="form-label">Termék neve:</label>
    <input type="text" class="form-control" id="nev_input" name="nev" maxlength="100" required>    
  </div>
  <div class="mb-3">
    <label for="leiras_input" class="form-label">Termék leírása:</label>
    <textarea class="form-control" id="leiras_input" name="leiras" rows="4" cols="50" maxlength="255"></textarea>
  </div>
  <div class="mb-3">
    <label for="ar_input" class="form-label">Termék ára:</label>
    <input type="number" class="form-control" id="ar_input" name="ar" oninput="this.value = 
      !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" required>    
  </div>
  <div class="mb-3">
    <label for="kep_input" class="form-label">Termékkép feltöltése:</label>   
    <input type="file" class="form-control" id="kep_input" name="kep" accept="image/*">    
  </div>
  <button type="submit" class="btn btn-primary">Hozzáadás</button>
</form>




