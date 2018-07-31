import java.util.Scanner;

public class IntToHexAndBin {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);

        int input = Integer.parseInt(console.nextLine());

        String hex = Integer.toHexString(input).toUpperCase();
        String bin = Integer.toBinaryString(input);

        System.out.println(hex);
        System.out.println(bin);
    }
}
