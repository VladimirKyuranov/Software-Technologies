import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class SymmetricNumbers {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);
        List<Integer> symmetricNumbers = new ArrayList<>();

        int number = Integer.parseInt(console.nextLine());

        for (int i = 1; i <= number; i++) {
            if (isSymmetric(i)){
                symmetricNumbers.add(i);
            }
        }

        for (Integer symmetricNumber : symmetricNumbers) {
            System.out.printf("%d ", symmetricNumber);
        }
    }
    
    public static boolean isSymmetric(int number){
        String numStr = String.valueOf(number);

        for (int i = 0; i < numStr.length() / 2; i++) {
            if (numStr.charAt(i) != numStr.charAt(numStr.length() - 1 - i)){
                return false;
            }
        }

        return true;
    }
}
