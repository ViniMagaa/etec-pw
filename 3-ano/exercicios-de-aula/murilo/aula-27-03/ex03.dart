import "dart:io";

void main() {
  print("Laço de repetição: for ... in");

  var numeros1 = [10, 9, 8, 7, 6];
  for (var item in numeros1) {
    print(item);
  }

  var nome1 = ["Ariana Grande", "Katy Perry", "Taylor Swift", "Luana Santana"];
  for (var nome in nome1) {
    print(nome);
  }

  print("foreach -> coleção.forEach(valor) { corpo da função }");
  nome1.forEach((var nome) => print("$nome!"));



  print("Laço while");
  int i = 0;
  while (i < 5)
  {
    print(i);
    i++;
  }



  print("Laço do ... while");
  int? op;
  do {
    print("\nMenu de opções: ");
    print("1 - Falar com atendente");
    print("2 - Mandar o responsável catar coquinho");
    print("3 - Xingar até a 4ª geração de quem decidiu fazer este sistema");

    stdout.write("Digite sua opção: ");
    op = int.parse(stdin.readLineSync()!);
    
    switch (op) 
    {
      case 1: 
        print("O atendente já te atenderá"); 
        break;
      case 2: 
        print("O responsável foi catar coquinho");
        break;
      case 3:
        print("Filhos, netos e bisnetos são cafonas!");
        break;
      default:
        print("Opção inválida");
        break;
    }
  } while (op >= 1 && op <= 3);
}