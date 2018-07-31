import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class MaxSeqOfEqualElements {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);

        List<Integer> numbers = Arrays.stream(console.nextLine().split(" "))
                .map(Integer::parseInt)
                .collect(Collectors.toList());

        int number = 0;
        int bestLen = 0;
        for (int i = 0; i < numbers.size() - 1; i++) {
            int len = 0;
            for (int j = i; j < numbers.size(); j++) {
                if (numbers.get(i) == numbers.get(j)) {
                    len++;
                } else {
                    if (len > bestLen){
                        bestLen = len;
                        number = numbers.get(i);
                    }
                    len = 0;
                    break;
                }
            }
        }

        for (int i = 0; i < bestLen; i++) {
            System.out.printf("%d ", number);
        }

        if (bestLen == 0){
            for (int i = 0; i < numbers.size(); i++) {
                System.out.printf("%d ", numbers.get(0));
            }
        }
    }
}
