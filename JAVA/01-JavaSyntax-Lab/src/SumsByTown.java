import java.util.*;

public class SumsByTown {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);

        TreeMap<String, Double> towns = new TreeMap<>();

        int count = Integer.parseInt(console.nextLine());

        for (int i = 0; i < count; i++) {
            String[] townArgs = console.nextLine().split("\\|");

            String town = townArgs[0].trim();
            Double income = Double.parseDouble(townArgs[1].trim());

            if (!towns.containsKey(town)){
                towns.put(town, income);
            }else {
                towns.put(town, towns.get(town) + income);
            }
        }

        for (Map.Entry<String, Double> entry : towns.entrySet()) {
            System.out.println(
                    String.format("%s -> %.1f", entry.getKey(), entry.getValue())
            );
        }
    }
}
