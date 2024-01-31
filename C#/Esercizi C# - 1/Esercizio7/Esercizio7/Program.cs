/* 7. Scrivere programma che verifichi se un numero è perfetto. Un numero perfetto è un intero positivo uguale alla somma dei suoi divisori positivi, escluso il numero stesso
  Shyti Franko 4AI */

namespace Esercizio7
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int num, sum = 0;

            do
            {
                Console.WriteLine("Inserisci un numero");
                num = Convert.ToInt32(Console.ReadLine());
            } while (num < 0);

            for (int i = 1; i <= num / 2; i++)
            {
                if (num % i == 0) {
                    sum += i;              
                }
            }

            if (sum == num)
            {
                Console.WriteLine("E un numero perfetto");
            } else
            {
                Console.WriteLine("Non e un numero perfetto");
            }
        }
    }
}
