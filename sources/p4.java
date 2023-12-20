class Room{
    float length, width, height;
    byte nWindows;
    static int totWindows;

    Room(){}
    Room(float l,float w,float h,byte n){
        length = l;width = w;height = h;
        nWindows = n; totWindows+=n;
    }
    Room(float l,float w){
        length = l;width = w;height = 10;
        nWindows = 1; totWindows++;
    }
    double area()
    { return (length*width);}
    void display(){
        System.out.println("\nLength: " + length + "\nWidth: " + width);
        System.out.println("Height: " + height);
        System.out.println("Windows: " + nWindows);
    }
}
class p4 {
    public static void main(String[] args){
        Room r1 = new Room();
        Room r2 = new Room(20,14,12,(byte)2);
        r1.display();r2.display();
        System.out.println("\nTotal number of windows: " + Room.totWindows);
    }
}
