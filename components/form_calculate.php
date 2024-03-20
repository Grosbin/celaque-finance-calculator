<form action="./controller/loan_calculator.php" method="post" class="container__form">

<img src="./assets/img/celaque.png" alt="celaque" class="logo_celaque">
  <h2>Calcula tu cuota (M)</h2>

  <div class="field__input">
    <label for="principal">Monto del préstamo:</label>
    <input type="number" id="principal" name="principal" required />
  </div>
  <div class="field__input">
    <label for="tasa_interes">Tasa de interés anual (en porcentaje):</label>
    <input
      type="number"
      step="0.01"
      id="tasa_interes"
      name="tasa_interes"
      required
    />
  </div>
  <div class="field__input">
    <label for="plazo">Plazo del préstamo en meses:</label>
    <input type="number" id="plazo" name="plazo" required />
  </div>
  <div class="container__button">
    <button class="button__submit" type="submit" name="calcular">Calcular</button>
  </div>
</form>
