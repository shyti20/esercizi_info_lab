/*12. Scrivere un programma C# per inserire un elemento (in una posizione specifica) in un array
 Shyti Franko 4AI*/

using System.Reflection.PortableExecutable;

namespace Esercizio12
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int n;
            do 
            {
                Console.WriteLine("Inserisci una dimensione: ");
                n = Convert.ToInt32(Console.ReadLine());
            } while (n <= 0);

            int[] arr = new int[n];

            for (int i = 0; i < arr.Length; i++)
            {
                Console.WriteLine("Inserisci il " + (i + 1) + " elemento: ");
                arr[i] = Convert.ToInt32(Console.ReadLine());
            }

            int pos;

            do
            {
                Console.WriteLine("Inserisci una posizione: ");
                pos = Convert.ToInt32(Console.ReadLine());
            } while (pos <= 0 || pos > arr.Length);

            for (int i = arr.Length - 1; i >= pos; i--)
            {
                arr[i] = arr[i - 1]; 
            }

            Console.WriteLine("Inserisci un valore: ");
            arr[pos - 1] = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Stampa array");
            for (int i = 0; i < arr.Length; i++)
            {
                Console.WriteLine(arr[i]);
            }

        }
    }
}