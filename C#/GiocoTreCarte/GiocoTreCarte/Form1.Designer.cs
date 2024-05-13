namespace GiocoTreCarte
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            buttonRigioca = new Button();
            buttonCarta1 = new Button();
            buttonCarta2 = new Button();
            buttonCarta3 = new Button();
            SuspendLayout();
            // 
            // buttonRigioca
            // 
            buttonRigioca.Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            buttonRigioca.Location = new Point(340, 400);
            buttonRigioca.Name = "buttonRigioca";
            buttonRigioca.Size = new Size(91, 38);
            buttonRigioca.TabIndex = 0;
            buttonRigioca.Text = "Rigioca";
            buttonRigioca.UseVisualStyleBackColor = true;
            buttonRigioca.Click += buttonRigioca_Click;
            // 
            // buttonCarta1
            // 
            buttonCarta1.BackgroundImageLayout = ImageLayout.Stretch;
            buttonCarta1.Location = new Point(46, 23);
            buttonCarta1.Name = "buttonCarta1";
            buttonCarta1.Size = new Size(180, 357);
            buttonCarta1.TabIndex = 1;
            buttonCarta1.UseVisualStyleBackColor = true;
            buttonCarta1.Click += sceltaClick;
            // 
            // buttonCarta2
            // 
            buttonCarta2.BackgroundImageLayout = ImageLayout.Stretch;
            buttonCarta2.Location = new Point(307, 23);
            buttonCarta2.Name = "buttonCarta2";
            buttonCarta2.Size = new Size(180, 357);
            buttonCarta2.TabIndex = 2;
            buttonCarta2.UseVisualStyleBackColor = true;
            buttonCarta2.Click += sceltaClick;
            // 
            // buttonCarta3
            // 
            buttonCarta3.BackgroundImageLayout = ImageLayout.Stretch;
            buttonCarta3.Location = new Point(589, 23);
            buttonCarta3.Name = "buttonCarta3";
            buttonCarta3.Size = new Size(180, 357);
            buttonCarta3.TabIndex = 3;
            buttonCarta3.UseVisualStyleBackColor = true;
            buttonCarta3.Click += sceltaClick;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(buttonCarta3);
            Controls.Add(buttonCarta2);
            Controls.Add(buttonCarta1);
            Controls.Add(buttonRigioca);
            Name = "Form1";
            Text = "Form1";
            Load += Form1_Load;
            ResumeLayout(false);
        }

        #endregion

        private Button buttonRigioca;
        private Button buttonCarta1;
        private Button buttonCarta2;
        private Button buttonCarta3;
    }
}