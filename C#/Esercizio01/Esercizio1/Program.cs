//1. Scrivere un programma che, dati due valori interi, calcoli e visualizzi la loro somma.
//Shyti Franko 4AI
namespace Esercizio1
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int a, b;
            do
            {
                Console.WriteLine("Inserisci il primo valore: ");
                a = Convert.ToInt32(Console.ReadLine());
            } while (a <= 0);

            do
            {
                Console.WriteLine("Inserisci il primo valore: ");
                b = Convert.ToInt32(Console.ReadLine());
            } while (b <= 0);

            int s = a + b;

            Console.WriteLine("Somma: " + s);

        }
    }
}