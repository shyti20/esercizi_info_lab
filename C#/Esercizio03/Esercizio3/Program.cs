// 3. Scrivere un programma che calcoli la somma di n valori inseriti dall’utente
//Shyti Franko 4AI

namespace Esercizio3
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int dim, num;
            int somma = 0;

            do
            {
                Console.WriteLine("Inserisci il numero di elementi: ");
                dim = Convert.ToInt32(Console.ReadLine());
            } while (dim < 0);

            for (int i = 0; i < dim; i++)
            {
                Console.WriteLine("Inserisci il numero: ");
                num = Convert.ToInt32(Console.ReadLine());
                somma += num;
            }

            Console.WriteLine("Somma: " + somma);

        }
    }
}