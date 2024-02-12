/*14. Nel calendario utilizzato dalla nazione di Cirpa, a ogni anno è associato uno fra 7 animali sacri:
nell’ordine, coniglio, gatto, drago, scimmia, serpente, cavallo, pavone. Sapendo che il 2020 è
stato un anno della scimmia, scrivere un’applicazione che permetta di ricavare, dato un anno,
l’animale sacro di riferimento
Shyti Franko 4AI*/

namespace Esercizio14
{
    internal class Program
    {
        static void Main(string[] args)
        {
            String[] animali = { "coniglio", "gatto", "drago", "scimmia", "serpente", "cavallo", "pavone" };
            int input;

            Console.WriteLine("Inserisci un anno: ");
            input = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Anno: " + animali[input % 7 - 1]);   
        }
    }
}