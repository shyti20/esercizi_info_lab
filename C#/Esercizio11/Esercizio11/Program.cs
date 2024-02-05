/*11. Lo studente realizzi un’applicazione che permetta l’acquisizione di n valori numerici compresi
fra due dati estremi (estremi inclusi); l’applicazione deve ricavare, a scelta dell’utente finale,
valore minimo o valore massimo.
Shyti Franko 4AI*/
namespace Esercizio11
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int num, min, max = 0;
            do
            {
                Console.WriteLine("Inserisci il numero di elementi da inserire: ");
                num = Convert.ToInt32(Console.ReadLine());
            } while (num < 0);

            int[] arr = new int[num];

            Console.WriteLine("Inserisci il primo valore: ");
            arr[0] = Convert.ToInt32(Console.ReadLine());
            
            max = arr[0];
            min = arr[0];
            
            for (int i = 1; i < arr.Length; i++)
            {
                Console.WriteLine("Inserisci il " + (i + 1) + " elemento: ");
                arr[i] = Convert.ToInt32(Console.ReadLine());

                if (max < arr[i])
                {
                    max = arr[i];
                } else if (min > arr[i])
                {
                    min = arr[i];
                }
            }

            Console.WriteLine("max = massimo min = minimo");
            String temp = Console.ReadLine();

            if (temp == "max")
            {
                Console.WriteLine("Il massimo: " + max);
            } else
            {
                Console.WriteLine("Il minimo: " + min);
            }
        }
    }
}