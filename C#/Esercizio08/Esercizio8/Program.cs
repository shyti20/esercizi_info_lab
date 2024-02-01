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
                Console.WriteLine("Inserisci un numero: ");
                num = Convert.ToInt32(Console.ReadLine());
            } while (num < 0);

            for (int i = 0; i < num; i++)
            {
                for (int j = 0; j < i + 1; j++)
                {
                    Console.Write(Convert.ToChar('A' + j));
                }

                for (int j = i - 1; j >= 0; j--)
                {
                    Console.Write(Convert.ToChar('A' + j));
                }
                Console.WriteLine();   
            }
        }
    }
}
