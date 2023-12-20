class Kunj{
    float length, width, height;
    byte nWindows;
    static int totWindows;

Kunj(){}
Kunj(float l,float w,float h,byte n){
length = l;width = w;height= h;
nWindows = n; totWindows+=n;
}
Kunj(float l,float w){
length = l;width = w;height= 10;
nWindows = 1; totWindows++;
}
void display(){
        System.out.println("\nLength: " + length + "\nWidth: " + width+"Height: " + height+"Windows: " + nWindows);
        System.out.println();
        System.out.println();
    }
}

class Room{
public static void main(String args[]){
Kunj r1 = new Kunj();
Kunj r2 = new Kunj(10,20,30,(byte)5);
Kunj r3 = new Kunj(40,50);
r1.display();r2.display();r3.display();
System.out.println(Kunj.totWindows);
}
}