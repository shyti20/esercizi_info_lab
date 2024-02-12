/*13. Implementare il gioco consistente nell’indovinare 3 numeri interi generati casualmente
dall’applicazione e compresi fra 1 e 100. Il programma dovrà indirizzare l’utente verso il numero
giusto indicando se il numero inserito è più grande o più piccolo di quello cercato; la vittoria si
ottiene indovinando i tre numeri in meno di 12 tentativi. Nota bene: acquisire i 3 numeri in una
sola volta.
Shyti Franko 4AI*/

namespace Esercizio13
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Random random = new Random();
            int[] rnd = new int[3];
            int num;

            for (int i = 0; i < rnd.Length; i++)
            {
                rnd[i] = Convert.ToInt32(random.Next(1, 100 + 1));
            }
            int j = 0, cont = 0;

            while(j < 12)
            {
                for (int i = 0; i < rnd.Length; i++)
                {
                    do
                    {
                        Console.WriteLine("Inserisci il " + (i + 1) + " numero compreso tra 1 e 100: ");
                        num  = Convert.ToInt32(Console.ReadLine());
                    } while (num <= 0 || num >= 100);

                    if (num == rnd[i])
                    {
                        Console.WriteLine("Hai indovinato il " + (i + 1) + " numero!");
                        cont++;
                    } else if (num > rnd[i])
                    {
                        Console.WriteLine("Il numero inserito e maggiore");
                    } else
                    {
                        Console.WriteLine("Il numero inserito e minore");
                    }
                }
                j++;
            }

            if (j == 12)
            {
                Console.WriteLine("Hai esaurito i tentativi");
            } else if (cont == 3)
            {
                Console.WriteLine("HAI VINTO");
            }
        }   
    }
}