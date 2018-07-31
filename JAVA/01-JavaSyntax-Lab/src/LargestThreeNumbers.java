import java.util.Arrays;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class LargestThreeNumbers {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);

        List<Integer> numbers = Arrays.stream(console.nextLine().split(" ")).map(Integer::parseInt).collect(Collectors.toList());
        Collections.sort(numbers);
        int count = Math.min(numbers.size(), 3);

        for (int i = 0; i < count; i++) {
            System.out.println(numbers.get(numbers.size() - i - 1));
        }
    }
}