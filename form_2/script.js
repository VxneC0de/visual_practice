/*document.addEventListener('DOMContentLoaded', function() {
  const paymentOptions = document.querySelectorAll('input[name="payment"]');
  
  paymentOptions.forEach(option => {
      option.addEventListener('change', function() {
          document.querySelectorAll('.details').forEach(detail => {
              detail.style.display = 'none';
              detail.style.opacity = '0';
          });
          const selectedDetails = document.querySelector(`#details-${this.id.split('-')[2]}`);
          selectedDetails.style.display = 'block';
          setTimeout(() => {
              selectedDetails.style.opacity = '1';
          }, 10);
      });
  });
});*/

document.addEventListener("DOMContentLoaded", function() {
  const paymentOptions = document.querySelectorAll('.payment-option');
  
  paymentOptions.forEach(option => {
      option.addEventListener('click', () => {
          // Ocultar todos los detalles
          document.querySelectorAll('.details').forEach(detail => {
              detail.style.display = 'none';
          });

          // Mostrar los detalles correspondientes al div seleccionado
          const details = option.querySelector('.details');
          details.style.display = 'block';
      });
  });
});

