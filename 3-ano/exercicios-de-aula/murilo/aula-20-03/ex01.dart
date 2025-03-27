void main() {
  String nome = "dart";
  int numero = 17;
  double valor = 5.5;
  bool checar = false;

  print("1: " + nome + " " + numero.toString() + " " + valor.toString() + " " + checar.toString());
  print("2: $nome $numero $valor $checar");

  for (int i = 0; i < 10; i++) {
    print(i);  
  }

  print("Tabuada do 5");
  for (int i = 1; i <= 10; i++) {
    int resultado = 5 * i;
    print("5 X $i = $resultado");
  }
}