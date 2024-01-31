/*10. Verificare se un dato numero è un numero di Kaprekar, ovvero un intero non negativo il cui quadrato può essere suddiviso in due parti che, sommate tra loro, forniscono nuovamente il
numero di partenza.
Shyti Franko 4AI*/

namespace Esercizio10
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int num;

            do
            {
                Console.WriteLine("Inserisci un numero di 2 cifre: ");
                num = Convert.ToInt32(Console.ReadLine());
            } while (num < 0);

            int quadNum = (int) Math.Pow(num , 2);
            int parte1 = quadNum / 100;
            int parte2 = quadNum % 100;

            if (parte1 + parte2 == num)
            {
                Console.WriteLine("Numero di Kaprekar");
            } else
            {
                Console.WriteLine("Numero non di Kaprekar");
            }

        }
    }
}
