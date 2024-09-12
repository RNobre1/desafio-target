import java.util.Scanner;
import java.util.regex.Pattern;
import java.util.regex.Matcher;

public class Main {
    public static void main(String[] args) {
        // input do usuário
        Scanner scanner = new Scanner(System.in);
        System.out.println("Digite uma string: ");
        String text = scanner.nextLine();

        // Verificar se a string contém a letra 'a'
        String regex = "[aA]";
        Pattern pattern = Pattern.compile(regex);
        Matcher matcher = pattern.matcher(text);

        int count = 0;
        while (matcher.find()) {
            count++;
        }

        // output de ocorrências
        if (count > 0) {
            System.out.println("A letra 'a' (maiúscula ou minúscula) ocorre " + count + " vez(es) na string.");
        } else {
            System.out.println("A letra 'a' (maiúscula ou minúscula) não foi encontrada na string.");
        }
    }
}
