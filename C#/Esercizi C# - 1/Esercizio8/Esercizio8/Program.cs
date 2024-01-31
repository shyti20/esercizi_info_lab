/*9. Scrivere un programma che verifichi se la somma dei fattoriali delle cifre di un dato numero è uguale al numero stesso.
Shyti Franko 4AI*/

namespace Esercizio8
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int num;
            
            do
            {
                Console.WriteLine("Inserisci il numero: ");
                num = Convert.ToInt32(Console.ReadLine());
            } while (num < 0);

            int cifra1 = num / 100;
            int cifra2 = num / 10 - cifra1 * 10;
            int cifra3 = num % 10;

            int fat1 = 0;
            int fat2 = 0;
            int fat3 = 0;

            for (int i = cifra1; i > 0; i++)
            {
                cifra1 *= i;
            }

            for (int i = cifra2; i > 0; i++)
            {
                cifra2 *= i;
            }

            for (int i = cifra3; i > 0; i++)
            {
                cifra3 *= i;
            }

            if (fat1 + fat2 + fat3 == num)
            {
                Console.WriteLine("bello");
            } else
            {
                Console.WriteLine("brutto");
            }

        }
    }
}
