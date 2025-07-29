void main(){
print("1-soma|2-divisão|3-multiplicação|4-subtração");
int opcao = 3;
  switch(opcao){
    case 1:
    int a = 10;
    int b = 20;
    print(a + b);

    case 2:
    double a = 40;
    double b = 20;
    print(a / b);
    
    case 3:
    int a = 20;
    int b = 40;
    print(a * b);
    

    case 4:
    int a = 10;
    int b = 5;
    print(a - b);
    break;

    default:
    print("não existe");
