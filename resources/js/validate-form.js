function validateForm(event) {
    // Validar los campos del formulario aquí
  
    // Ejemplo de validación simple
    const nombre = document.getElementById('nombre_prod').value;
    const descripcion = document.getElementById('descripcion').value;
    const precio = document.getElementById('precio').value;
    const img1 = document.getElementById('img1_prod').value;
    const img2 = document.getElementById('img2_prod').value;
    const img3 = document.getElementById('img3_prod').value;
    const estado = document.getElementById('estado').value;
    const talla = document.getElementById('talla').value;
    const color = document.getElementById('color').value;
    const marca = document.getElementById('marca').value;
    const cantidad = document.getElementById('cantidad').value;
  
    if (nombre === '' || descripcion === '' || precio === '' || img1 === '' || img2 === '' || img3 === '' ||
      estado === '' || talla === '' || color === '' || marca === '' || cantidad === '') {
      event.preventDefault();
      alert('Por favor, complete todos los campos.');
    }
  }