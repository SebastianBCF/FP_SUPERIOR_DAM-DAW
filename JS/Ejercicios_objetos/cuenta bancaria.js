let CuentaBancaria = {
  titular: "sebastian",
  saldo: 0,

  ingresar: function (cantidad) {
    this.saldo += cantidad;
    console.log(`se ingreso ${cantidad} y tu saldo actual es ${this.saldo}`);
  },

  retirar: function (cantidad) {
    if (cantidad <= this.saldo) {
      this.saldo -= cantidad;
      console.log(`has retirado ${cantidad} tu saldo actual es ${this.saldo}`);
    } else {
      console.log(`saldo insuficiente saldo actual ${this.saldo}`);
    }
  },
  mostrarsaldo: function () {
    console.log(`saldo actual del titular ${this.titular} es ${this.saldo}`);
  },
};

CuentaBancaria.ingresar(100);
CuentaBancaria.retirar(30);
CuentaBancaria.mostrarsaldo();
