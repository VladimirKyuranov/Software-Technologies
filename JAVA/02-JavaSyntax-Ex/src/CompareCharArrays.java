import java.util.Scanner;

public class CompareCharArrays {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);

        String a = console.nextLine().replaceAll(" ", "");
        String b = console.nextLine().replaceAll(" ", "");

        if (a.compareTo(b) < 0) {
            System.out.println(a);
            System.out.println(b);
        } else {
            System.out.println(b);
            System.out.println(a);
        }
    }
}
