//2.Scrivere un programma per verificare se due numeri interi non negativi hanno la stessa cifra più significativa.
//Shyti Franko 4AI

using System.ComponentModel;

namespace Esercizio2
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string a, b;
            int con = 0;

            do
            {
                a = Console.ReadLine();
            } while (a == null);

            do
            {
                b = Console.ReadLine();
            } while (b == null);

            if (int.TryParse(Console.ReadLine(), out con)) { }
            foreach (char i in a)
            {
                foreach (char j in b)
                {
                
                }
            }
        }
    }
}