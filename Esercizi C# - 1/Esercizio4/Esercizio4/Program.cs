namespace Esercizio4
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int i = 0, num = 1;
            float media = 0;
            while (num == 0)
            {
                Console.WriteLine("Inserisci l'elemento: " + i + 1);
                num = Convert.ToInt32(Console.ReadLine());
                media += num;
                i++;
            }

            media /= i;
            Console.WriteLine("Media: " + media);
        }
    }
}