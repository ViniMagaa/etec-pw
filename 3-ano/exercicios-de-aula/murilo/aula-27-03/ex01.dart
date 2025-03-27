import 'dart:io';

void main() {
  // print() -> imprime e pula de linha
  // stdout.write() -> imprime e maém na mesma linha
  stdout.write('Digite um número: ');
  String? numTexto = stdin.readLineSync();
  if (numTexto != null)
  {
    int num = int.parse(numTexto);
    print(num);
  }
}