
class p5 {
   public static void main(String[] args) {
       double numbers [] = {10.5,20.6,30.8,15.5,17.3,25.5,27.2,20,30,18.5};
       byte ctr;
       double sum=0, avg;

       System.out.println("list of numbers is");
       for(ctr=0;ctr<10;ctr++){
           System.out.println(numbers[ctr]);
           sum = sum + numbers[ctr];
       }
       avg = sum / 10;
       System.out.println("\nAverage of above numbers is "+avg);
   } 
}
