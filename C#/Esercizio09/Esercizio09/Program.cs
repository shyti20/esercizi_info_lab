/* Scrivere un programma che verifichi se la somma dei fattoriali delle cifre di un dato numero è uguale al numero stesso.
 Shyti Franko 4AI */

using System.Diagnostics.CodeAnalysis;

namespace Esercizio_9
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int n;
            Console.WriteLine("Inserire un numero: ");
            n = Convert.ToInt32(Console.ReadLine());

            int nCifre = (int)Math.Log10(n) + 1;
            int cifra, temp = n, sum = 0;

            for (int i = 0; i < nCifre; i++)
            {
                cifra = temp % 10;
                temp /= 10;
                for (int j = cifra - 1; j > 0; j--)
                {
                   cifra *= j;
                }
                sum += cifra;
            }

            if (sum == n)
            {
                Console.WriteLine("Numero bello");
            }
            else
            {
                Console.WriteLine("Numero brutto");
            }
        }
    }
}
