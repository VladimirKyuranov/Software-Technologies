import java.util.Scanner;

public class SumTwoNumbers {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);

        double num1 = Double.parseDouble(console.nextLine());
        double num2 = Double.parseDouble(console.nextLine());
        double sum = num1 + num2;

        System.out.println(
                String.format("%.2f", sum)
        );
    }
}
