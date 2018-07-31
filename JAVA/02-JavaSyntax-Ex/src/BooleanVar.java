import java.util.Scanner;

public class BooleanVar {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);

        boolean condition = Boolean.parseBoolean(console.nextLine());

        if (condition) {
            System.out.println("Yes");
        } else {
            System.out.println("No");
        }
    }
}
