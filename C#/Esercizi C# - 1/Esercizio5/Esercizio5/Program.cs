/* 5. Scrivere un programma che prenda in input una singola cifra e un numero di righe; costruire un triangolo come mostrato in figura.
Shyti  Franko 4Ai */

namespace Esercizio5
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int num, nRighe;
            do
            {
                Console.WriteLine("Inserisci un numero: ");
                num = Convert.ToInt32(Console.ReadLine());
            } while (num < 0);
            do
            {
                Console.WriteLine("Inserisci il numero di righe: ");
                nRighe = Convert.ToInt32(Console.ReadLine());
            } while (nRighe < 0);
            int cont = nRighe;
            for (int i = 0; i < nRighe; i++)
            {
                for (int j = 0; j < cont; j++)
                {
                    Console.Write("" + num);
                }
                Console.WriteLine("<br />");
                cont--;
            }
        }
    }
}