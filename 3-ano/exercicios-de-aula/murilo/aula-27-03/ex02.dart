import "dart:io";

void main() {
  print("Menu de opções: ");
  print("1 - Falar com atendente");
  print("2 - Mandar o responsável catar coquinho");
  print("3 - Xingar até a 4ª geração de quem decidiu fazer este sistema");

  stdout.write("Digite sua opção: ");
  int? op = int.parse(stdin.readLineSync()!);
  
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
}