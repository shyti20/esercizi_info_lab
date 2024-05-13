namespace Esercizio35
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
            components = new System.ComponentModel.Container();
            buttonAvvia = new Button();
            trackBarMarce = new TrackBar();
            label1 = new Label();
            label2 = new Label();
            label3 = new Label();
            label4 = new Label();
            label5 = new Label();
            label6 = new Label();
            timer1 = new System.Windows.Forms.Timer(components);
            labelGiri = new Label();
            ((System.ComponentModel.ISupportInitialize)trackBarMarce).BeginInit();
            SuspendLayout();
            // 
            // buttonAvvia
            // 
            buttonAvvia.Location = new Point(299, 160);
            buttonAvvia.Name = "buttonAvvia";
            buttonAvvia.Size = new Size(173, 90);
            buttonAvvia.TabIndex = 0;
            buttonAvvia.Text = "Avvia";
            buttonAvvia.UseVisualStyleBackColor = true;
            buttonAvvia.Click += buttonAvvia_Click;
            // 
            // trackBarMarce
            // 
            trackBarMarce.Location = new Point(192, 283);
            trackBarMarce.Maximum = 6;
            trackBarMarce.Minimum = 1;
            trackBarMarce.Name = "trackBarMarce";
            trackBarMarce.Size = new Size(420, 45);
            trackBarMarce.TabIndex = 1;
            trackBarMarce.Value = 1;
            trackBarMarce.Scroll += timer1_Tick;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(201, 313);
            label1.Name = "label1";
            label1.Size = new Size(13, 15);
            label1.TabIndex = 2;
            label1.Text = "1";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(280, 313);
            label2.Name = "label2";
            label2.Size = new Size(13, 15);
            label2.TabIndex = 3;
            label2.Text = "2";
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Location = new Point(355, 316);
            label3.Name = "label3";
            label3.Size = new Size(13, 15);
            label3.TabIndex = 4;
            label3.Text = "3";
            // 
            // label4
            // 
            label4.AutoSize = true;
            label4.Location = new Point(435, 313);
            label4.Name = "label4";
            label4.Size = new Size(13, 15);
            label4.TabIndex = 5;
            label4.Text = "4";
            // 
            // label5
            // 
            label5.AutoSize = true;
            label5.Location = new Point(511, 313);
            label5.Name = "label5";
            label5.Size = new Size(13, 15);
            label5.TabIndex = 6;
            label5.Text = "5";
            // 
            // label6
            // 
            label6.AutoSize = true;
            label6.Location = new Point(593, 315);
            label6.Name = "label6";
            label6.Size = new Size(13, 15);
            label6.TabIndex = 7;
            label6.Text = "6";
            // 
            // timer1
            // 
            timer1.Interval = 2;
            timer1.Tick += timer1_Tick;
            // 
            // labelGiri
            // 
            labelGiri.AutoSize = true;
            labelGiri.Location = new Point(299, 121);
            labelGiri.Name = "labelGiri";
            labelGiri.Size = new Size(13, 15);
            labelGiri.TabIndex = 8;
            labelGiri.Text = "0";
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(labelGiri);
            Controls.Add(label6);
            Controls.Add(label5);
            Controls.Add(label4);
            Controls.Add(label3);
            Controls.Add(label2);
            Controls.Add(label1);
            Controls.Add(trackBarMarce);
            Controls.Add(buttonAvvia);
            Name = "Form1";
            Text = "Form1";
            ((System.ComponentModel.ISupportInitialize)trackBarMarce).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button buttonAvvia;
        private TrackBar trackBarMarce;
        private Label label1;
        private Label label2;
        private Label label3;
        private Label label4;
        private Label label5;
        private Label label6;
        private System.Windows.Forms.Timer timer1;
        private Label labelGiri;
    }
}