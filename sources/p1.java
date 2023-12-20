public class p1 {
    public static void main(String[] args){
        double principal;
        double rate;
        double duration;
        double maturity;
        double interest;

        principal = 17000;
        rate = 9.50;
        duration = 3;
        interest = principal * duration * rate / 100;
        maturity = interest + principal;

        System.out.println("principal amount: " + principal + " Rupees");
        System.out.println("Deposit for duration of "+ duration + " Years");
        System.out.println("Interest rate: " + rate + " %");
        System.out.println("Interest amount: " + interest + " Rupees");
        System.out.println("Maturity amount: "+maturity + " Rupees");
    }
}
