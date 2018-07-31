import java.util.Arrays;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class ThreeIntegersSum {
    public static void main(String[] args) {
        //let [a, b, c] = input[0].split(' ').map(Number).sort((x, y) => x - y);
        Scanner console = new Scanner(System.in);

        List<Integer> numbers = Arrays.stream(console.nextLine().split(" ")).map(Integer::parseInt).collect(Collectors.toList());
        Collections.sort(numbers);

        int a = numbers.get(0);
        int b = numbers.get(1);
        int c = numbers.get(2);

        String result = "No";

        if (a + b == c) {
            result = String.format("%d + %d = %d", a, b, c);
        }

        if (b + c == a) {
            result = String.format("%d + %d = %d", b, c, a);
        }

        if (a + c == b){
            result = String.format("%d + %d = %d", a, c, b);
        }

        System.out.println(result);
    }
}
