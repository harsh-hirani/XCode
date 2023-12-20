class Interest{
public static void main(String[] args){
double principal;
double duration;
double rate;
double interest;
double maturity;

principal = 85000;
duration = 3;
rate = 11.5;
interest = principal*duration*rate/100;
maturity = principal + interest;

System.out.println("principal amount: "+ principal +" Rupees");
System.out.println("duration is "+duration+" years");
System.out.println("rate is " + rate+" %");
System.out.println("interest amount: "+ interest+" Rupees");
System.out.println("maturity amount: "+ maturity+" Rupees");
}
}