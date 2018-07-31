import java.util.Scanner;

public class SumNIntegers {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);

        int count = Integer.parseInt(console.nextLine());
        int sum = 0;

        for (int i = 0; i < count; i++) {
            int num = Integer.parseInt(console.nextLine());
            sum += num;
        }

        System.out.println(
                String.format("Sum = %d", sum));
    }
}
